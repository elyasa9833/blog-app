<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
    <a class="navbar-brand" href="#">Elyasa Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @if ($active == 'home') active @endif" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if ($active == 'about') active @endif" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if ($active == 'posts') active @endif" href="/posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if ($active == 'categories') active @endif" href="/categories">Categories</a>
        </li>
    </ul>
    </div>
    </div>
</nav>