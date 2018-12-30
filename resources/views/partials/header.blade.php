<nav class="top-nav">
  <div class="title">
    @svg('logo')
    <span>{!! $site_name !!}</span>
  </div>
  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
  @endif
</nav>
