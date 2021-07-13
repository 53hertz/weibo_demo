@if ($items->count() > 0)
  <ul class="list-unstyled">
    @foreach ($items as $status)
      @include('statuses._status',  ['user' => $status->user])
    @endforeach
  </ul>
  <div class="mt-5">
    {!! $items->render() !!}
  </div>
@else
  <p>没有数据！</p>
@endif
