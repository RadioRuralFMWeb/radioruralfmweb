Webapp.Router.map(function () {
  
  this.resource('playlists', function(){
    this.resource('playlist', { path: '/:playlist_id' }, function(){
      this.route('edit');
    });
    this.route('create');
  });
  
  this.resource('sounds', function(){
    this.resource('sound', { path: '/:sound_id' }, function(){
      this.route('edit');
    });
    this.route('create');
  });
  
  this.resource('users', function(){
    this.resource('user', { path: '/:user_id' }, function(){
      this.route('edit');
    });
    this.route('create');
  });
  
});
