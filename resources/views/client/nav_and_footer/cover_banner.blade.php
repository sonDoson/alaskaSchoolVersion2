<div class="cover-baner row">
    <div class="banner-01 col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
        <section class="banner cover_01">
            @if(!empty($section_1[key($section_1)]))
            @if(sizeof($section_1[key($section_1)]) <= 4)
            @for($i=0; $i < sizeof($section_1[key($section_1)]); $i++)
            <article>
            <a href="{!! '/cat/' . $section_1[key($section_1)][$i]['id_category']. '/' . $section_1[key($section_1)][$i]['id'] !!}">
                <img src="{{ $section_1[key($section_1)][$i]['images'][0] }}" alt="" width="100%" height="auto" />
            </a>
            </article>
            @endfor
            @else
            @for($i=0; $i < 4; $i++)
            <article>
            <a href="{!! '/cat/' . $section_1[key($section_1)][$i]['id_category']. '/' . $section_1[key($section_1)][$i]['id'] !!}">
                <img src="{{ $section_1[key($section_1)][$i]['images'][0] }}" alt="" width="100%" height="auto" />
            </a>
            </article>
            @endfor
            @endif
            @endif
        </section>
    </div>
    <div class="new_elements_first col-xs-0 col-sm-0 col-md-0 col-lg-4 col-xl-3">
        <div class="short-news-top">
            @if(!empty($section_1[key($section_1)]))
            @if(sizeof($section_1[key($section_1)]) <= 4)
            @for($i=0; $i < sizeof($section_1[key($section_1)]); $i++)
                <div style="padding-left: 0;">
                <a href="{!! '/cat/' . $section_1[key($section_1)][$i]['id_category']. '/' . $section_1[key($section_1)][$i]['id'] !!}">
                <div class="short-news-item">
                    <div class="short-news-item-timetag">
                        <div class="wrap-item-timetag">
                            <p>{!! $section_1[key($section_1)][$i]['created_at'][0] !!}</p>
                            <p>{!! $section_1[key($section_1)][$i]['created_at'][1] !!}</p>
                        </div>
                    </div>
                    <div class="short-news-item-content">
                        <h4>{!! $section_1[key($section_1)][$i][$lang[0]] !!}</h4>
                        <p>{!! $section_1[key($section_1)][$i][$lang[1]] !!}</p>
                    </div>
                </div>
                </a>
                </div>
            @endfor
            @else
            @for($i=0; $i < 4; $i++)
                <div style="padding-left: 0;">
                <a href="{!! '/cat/' . $section_1[key($section_1)][$i]['id_category']. '/' . $section_1[key($section_1)][$i]['id'] !!}">
                <div class="short-news-item">
                    <div class="short-news-item-timetag">
                        <div class="wrap-item-timetag">
                            <p>{!! $section_1[key($section_1)][$i]['created_at'][0] !!}</p>
                            <p>{!! $section_1[key($section_1)][$i]['created_at'][1] !!}</p>
                        </div>
                    </div>
                    <div class="short-news-item-content">
                        <h4>{!! $section_1[key($section_1)][$i][$lang[0]] !!}</h4>
                        <p>{!! $section_1[key($section_1)][$i][$lang[1]] !!}</p>
                    </div>
                </div>
                </a>
                </div>
            @endfor
            @endif
            @endif
        </div>
    </div>
</div>

