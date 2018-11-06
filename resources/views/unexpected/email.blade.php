<h2>Thank you for using our service !</h2>
<p>Plans : <b>{{ $booking->plan->name }}</b></p>
<p>Full name : <b>{{ $booking->full_name }}</b></p>
<p>Email : <b>{{ $booking->email }}</b></p>
<p>From : <b>{{ $booking->start_at }}</b></p>
<p>To <b>{{ $booking->end_at }}</b></p>
<p>Adult : <b>{{ $booking->adult }}</b></p>
<p>Child : <b>{{ $booking->child }}</b></p>
<h3>total : {{ $booking->total_amount }} $</h3>
