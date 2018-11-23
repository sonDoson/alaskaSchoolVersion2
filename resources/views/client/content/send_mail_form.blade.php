<div id="back-section-2" style="background-color: lightgrey !important;">
    <div id="section-send-mail" style="">
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
</div>