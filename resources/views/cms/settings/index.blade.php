@extends('layouts.dashboard')

@section('title', 'Settings')

@section('content')
  <div class="row" id="settings">
    <div class="col-sm-10">
      <div class="tab-container">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#socialAccounts" data-toggle="tab">Social Accounts</a></li>
          <li><a href="#profile" data-toggle="tab">Profile</a></li>
          <li><a href="#messages" data-toggle="tab">Messages</a></li>
        </ul>
        <div class="tab-content">
          <div id="socialAccounts" class="tab-pane active cont">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" v-model="facebook" placeholder="Facebook">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" v-model="twitter" placeholder="Twitter">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" v-model="github" placeholder="Github">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" v-model="instagram" placeholder="Instagram">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" v-model="linkedin" placeholder="LinkedIn">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" v-model="googleplus" placeholder="Google +">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary" v-on:click="updateSettings">Update Settings <i class="icon s7-angle-right"></i></button>
                </div>
              </div>
            </div>
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
