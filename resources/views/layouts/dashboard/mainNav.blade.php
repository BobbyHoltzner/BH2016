<div class="am-left-sidebar">
  <div class="content">
    <div class="am-logo"></div>
    <ul class="sidebar-elements">
      <li class="parent {{setActive('dashboard')}}">
        <a href="/dashboard">
          <i class="icon s7-monitor"></i>
          <span>Home</span>
        </a>
      </li>
      <li class="parent {{setActive(['dashboard/posts', 'dashboard/categories', 'dashboard/tags', 'dashboard/posts/create'])}}">
        <a href="/dashboard/posts">
          <i class="icon s7-pin"></i>
          <span>Posts</span>
        </a>
        <ul class="sub">
          <li>
            <a href="/dashboard/posts">Posts</a>
          </li>
          <li>
            <a href="/dashboard/posts/create">Add New Post</a>
          </li>
          <li>
            <a href="/dashboard/categories">Categories</a>
          </li>
          <li>
            <a href="/dashboard/tags">Tags</a>
          </li>
        </ul>
      </li>
      <li class="parent">
        <a href="#">
          <i class="icon s7-copy-file"></i>
          <span>Pages</span>
        </a>
      </li>
      <li class="parent {{setActive('dashboard/settings')}}">
        <a href="/dashboard/settings">
          <i class="icon s7-tools"></i>
          <span>Settings</span>
        </a>
      </li>
    </ul>
  </div>
</div>
