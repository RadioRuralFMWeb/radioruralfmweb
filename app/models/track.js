import Ember from 'ember';
import DS from 'ember-data';
import {task} from 'ember-concurrency';
import {validator, buildValidations} from 'ember-cp-validations';
import youtubeUrlToId from 'radio4000/utils/youtube-url-to-id';
import {fetchTrackAvailability} from 'radio4000/utils/youtube-api';
import { inject as service } from '@ember/service';
import firebase from 'firebase/app'
import format from 'date-fns/format'
import {findHashtags} from 'radio4000/utils/hashtag'

const {Model, attr, belongsTo} = DS;
const {get, set, computed} = Ember;

export const Validations = buildValidations({
	url: [
		validator('presence', {
			presence: true,
			message: 'A YouTube or Soundcloud URL (https://...) is required to add a new track'
		}),
		validator('provider-url')
	],
	discogsUrl: [
		validator('discogs-url')
	],
	title: [
		validator('presence', {
			dependentKeys: ['model.url'],
			presence: true,
			ignoreBlank: true,
			message: 'The track title should not be left empty'
		}),
		validator('length', {
			max: 256
		})
	],
	body: [
		validator('length', {
			max: 300
		})
	]
});

export default Model.extend(Validations, {
	firebaseApp: service(),

	created: attr('number', {
		defaultValue() {
			return firebase.database.ServerValue.TIMESTAMP
		}
	}),
	url: attr('string'),
	title: attr('string'),
	body: attr('string'),
	ytid: attr('string'),

	discogsUrl: attr('string'),

	mediaNotAvailable: attr('boolean', {
		defaultValue: false
	}),

	// relationships
	channel: belongsTo('channel', {
		async: true,
		inverse: 'tracks'
	}),

	// Own properties
	// property for local use only, not planned to save them
	liveInCurrentPlayer: false,
	playedInCurrentPlayer: false,
	finishedInCurrentPlayer: false,

	createdMonth: computed('created', function () {
		let created = get(this, 'created');

		// Avoid temporary Firebase timestamps.
		// if (!(created instanceof Date) || isNaN(created)) {
		if (created['.sv'] === 'timestamp') {
			Ember.debug('using temporary date')
			created = new Date();
		}

		return format(created, 'MMMM YYYY');
	}),

	tags: computed('body', function() {
		const body = get(this, 'body')
		const tags = findHashtags(body)
		return tags
	}),

	searchableData: computed('title', 'body', function() {
		return [
			get(this, 'title'),
			get(this, 'body')
		].join(' ');
	}),

	// If the user changes the url, we need to update the YouTube id.
	updateYoutubeId() {
		const url = get(this, 'url');
		const ytid = youtubeUrlToId(url);
		if (ytid) {
			set(this, 'ytid', ytid);
		}
	},

	// In case url changed, we need to set the ytid.
	// and also check if the track is available on the provider
	update: task(function * () {
		if (!get(this, 'hasDirtyAttributes')) {
			return
		}

		yield this.updateYoutubeId()
		const ytid = this.get('ytid')

		let isAvailable = yield fetchTrackAvailability(ytid)
		this.set('mediaNotAvailable', !isAvailable)

		yield this.save()
	}).drop(),

	delete: task(function * () {
		// Also removes the relationship on the channel.
		yield this.destroyRecord();
	}).drop()
});
