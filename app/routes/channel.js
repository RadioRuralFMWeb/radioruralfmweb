/*global Firebase */
import Ember from 'ember';

export default Ember.Route.extend({
	model: function(params) {

		// 1. This is how it should be
		// but no findQuery support in Emberfire
		// return this.store.find('channel', { slug: params.channel_slug });

		// 2. Alternative solution
		// but loads all channels………
		// return this.store.find('channel').then(function(channels) {
		// 	return channels.findBy('slug', params.channel_slug);
		// });

		// 3. firebase way but doesn't return an ember model
		// but requires TWO queries: one with firebase to find id from slug
		// and one from ember now that we have the ID, this way we get a "ember" model
		var ref = new Firebase("https://radio4000-dev.firebaseio.com/channels/");
		var that = this;

		// find the channel by slug without emberfire, just firebase
		var channelFromSlug = new Ember.RSVP.Promise(function(resolve, reject) {
			ref.orderByChild('slug').equalTo(params.channel_slug).on('child_added', function(snapshot) {
				resolve(snapshot.key());
			}, function(error) {
				reject(error);
			});
		});

		// use that id to query using emberfire,
		// so we get a real "ember" model (and not the pure firebase one)
		return channelFromSlug.then(function(value) {
			return that.store.find('channel', value).then(function(data) {
				return data;
			}, function(error) {
				console.log(error);
			});
		});
	},

	afterModel: function(model) {
		window.scrollTo(0,0);
		document.title = model.get('title') + ' - Radio4000';
		this.controllerFor('channel.edit').set('model', model);
	},

	// because we use slugs instead of ids in the url
	serialize: function(model) {
		return { channel_slug: model.get('slug') };
	},

	renderTemplate: function() {
		this._super();

		// update contextual nav
		this.render('contextual-navigation/cn-channel', {
			into: 'application',
			outlet: 'contextual-navigation'
		});
	},

	// Reset doc title when leaving the route
	deactivate: function() {
		document.title = 'Radio4000';
	}
});
