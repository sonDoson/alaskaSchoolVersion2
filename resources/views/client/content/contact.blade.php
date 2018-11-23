@extends('client.layout.contact_layout')
@section('content')
    <div class="contact-container col-lg-12 col-xl-8" style="padding-right:0;">
        <div class="contact-content font-resize">
            <div class="contact-text">
                {!! $contact[$lang[1]] !!}
            </div>
        </div>
        <div id="contact-map">
            <iframe {!! $contact['map'] !!} width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
@stop