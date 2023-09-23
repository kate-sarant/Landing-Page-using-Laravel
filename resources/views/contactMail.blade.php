<h2>New message for Pan-Arcadian Federation of America !</h2> <br><br>

<h4>
You received an email from : {{ request('fullname') }} <br><br>
</h4>

<p class='text-sm '>
User details: <br><br>

Name:  {{ request('fullname') }}<br>

Email:  {{ request('email') }}<br>

Phone:  {{ request('phone') }}<br>

Message:  {!! request('message') !!}<br><br>

Thanks
</p>