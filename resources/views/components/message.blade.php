@props([
    "message" => null,
    "type" => [
        "info" => "bg-blue-100",
        "success" => "bg-green-100",
        "warning" => "bg-yellow-100",
        "error" => "bg-red-100",
    ],
])

@if ($message)
    <div
        
    >
        {{ $message }}
    </div>
@endif
