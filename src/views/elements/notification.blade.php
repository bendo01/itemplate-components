<div class="notification{{ isset($classes) ? ' '.implode(' ', $classes): null}}" {{isset($id) ? 'id="'.$id.'"': null}}>
  <button class="delete"></button>
  {{ $slot }}
</div>
