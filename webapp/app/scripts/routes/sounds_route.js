Webapp.SoundsRoute = Ember.Route.extend({
  model: function() {
    return this.get('store').find('sound');
  }
});

