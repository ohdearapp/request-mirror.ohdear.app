{
  "message": "This is a simple JSON document",
  "generated_by": "request-mirror",
  "timestamp": "{{ date('c') }}",
  "data": {
    "example": true,
    "version": "1.0"
  },
  "http-headers": {
@foreach(request()->headers->all() as $name => $values)
    "{{ $name }}": "{{ is_array($values) ? implode(', ', $values) : $values }}"{{ $loop->last ? '' : ',' }}
@endforeach
  }
}