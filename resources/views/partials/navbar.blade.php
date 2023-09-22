<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
    <a class="navbar-brand" href="#">Elyasa Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item @if ($title == 'Home') active @endif">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item @if ($title == 'About') active @endif">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item @if ($title == 'Posts') active @endif">
          <a class="nav-link" href="/blog">Blog</a>
        </li>
    </ul>
    </div>
    </div>
</nav>