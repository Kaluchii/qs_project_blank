@section('seo-text')
    <div class="seo-text @if($seotext == '<p><br></p>' || $seotext == '') seo-text--empty @endif">
        <div class="seo-text__content text-block">{!! $seotext !!}</div>
    </div>
@endsection