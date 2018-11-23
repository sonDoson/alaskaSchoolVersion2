    <footer>
        <div class="row section">
            <div id="footer-left" class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div id="footer-left-img">
                    <img src="{{ asset('uploads/logo/logo02.png') }}" alt="alaska school" width="auto" height="100%" />
                </div>
                <div id="footer-left-form">
                    <form method="POST" action="/send_mail">
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        <div>
                            <input name="email" type="text" placeholder=" * Email..." required /><br />
                        </div>
                        <div class="row" style="width: 100%;margin: 0;">
                            <div class="col" style="padding:0">
                            <input name="name" type="text" placeholder=" * Họ và tên..." required />
                            </div>
                            <div class="col" style="padding:0">
                            <input name="number" type="text" placeholder=" * Số điện thoại..." required />
                            </div>
                        </div>
                        <div>
                            <textarea name="content"></textarea>
                        </div>
                        <input type="submit" value="SEND">
                    </form>
                </div>
                <div id="footer-left-conect">
                    <div><p>Connect with us</p></div>
                    <div>
                        @foreach($contact['link'] as $key => $value)
                            @if($value['link'] !== '')
                            <a href="{{ $value['link'] }}" style="color: #ffffff"><i style="font-size: 45px; margin-right: 10px" class="{{ $value['icon'] }}"></i></a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div id="footer-right" class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

            </div>
        </div>
    </footer>