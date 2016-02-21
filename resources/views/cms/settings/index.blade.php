@extends('layouts.dashboard')

@section('title', 'Settings')

@section('content')
  <div class="row" id="settings">
    <div class="col-sm-10">
      <div class="tab-container">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
          <li><a href="#profile" data-toggle="tab">Profile</a></li>
          <li><a href="#messages" data-toggle="tab">Messages</a></li>
        </ul>
        <div class="tab-content">
          <div id="home" class="tab-pane active cont">
            <p> Consectetur adipisicing elit. Ad aperiam dolore veniam mollitia consectetur aut. Cumque sunt consequatur, officiis voluptatum quas atque magnam animi eaque facere cupiditate quos ad totam saepe porro nostrum tenetur. Assumenda esse quidem, sed vel dolore quisquam fuga culpa non, ducimus, impedit fugiat vero similique recusandae?</p>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam dolore veniam mollitia consectetur aut. Cumque sunt consequatur, officiis voluptatum quas atque magnam animi eaque facere cupiditate quos ad totam saepe porro nostrum tenetur. Assumenda esse quidem, sed vel dolore quisquam fuga culpa non, ducimus, impedit fugiat vero similique recusandae?</p>
          </div>
          <div id="profile" class="tab-pane cont">
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
            <p> Consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
          </div>
          <div id="messages" class="tab-pane">
            <p>Consectetur adipisicing elit. Ipsam ut praesentium, voluptate quidem necessitatibus quam nam officia soluta aperiam, recusandae.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos facilis laboriosam, vitae ipsum tenetur atque vel repellendus culpa reiciendis velit quas, unde soluta quidem voluptas ipsam, rerum fuga placeat rem error voluptate eligendi modi. Delectus, iure sit impedit? Facere provident expedita itaque, magni, quas assumenda numquam eum! Sequi deserunt, rerum.</p><a href="#">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
