<!-- resources/views/partials/header.blade.php -->
<div class="toggle_icon menu-circle" id="menu">
    <i class="fas fa-list"></i> 
</div>

<nav class="nav" id="nav">
    <a href="#" class="nav_logo">
        <img src="{{ asset('img/logo.png') }}" alt="logo" />
    </a>
    <ul class="nav_list">
        <li><a class="active" href="#home">About Me</a></li>
        <li><a href="#about">Experience</a></li>
    </ul>
    <div class="toggle-switch">
        <label class="toggle-lable">
            <input class="toggle-checkout" id="toggle-checkout" type="checkbox">
            <span class="slider"></span>
        </label>
    </div>
</nav>
