<head>
    @include('bootsv5.video')
</head>

<div class="dima-main clearfix">
    <!-- START company REVOLUTION R 6.5.7 -->
    <!-- START Vidio Thumnail -->
    <div class="tp-banner-container" id="home">
        <rs-fullwidth-wrap id="rev_slider_5_1_forcefullwidth" style="height: auto">
            <rs-module-wrap id="rev_slider_5_1_wrapper" data-source="gallery"
                style="visibility: visible; background: rgb(34, 34, 34); padding: 0px; height: auto; display: block; width: 100%; margin-top: 0px; margin-bottom: 0px; position: absolute; max-height: none; overflow: visible; left: 0px;">
                <rs-module id="rev_slider_5_1" style="height: auto; width: 100%; max-height: none;" data-version="6.5.7"
                    data-idcheck="true" class="revslider-initialised rev_redraw_on_blurfocus" data-slideactive="rs-5">
                    <rs-sbg-px
                        style="transform: translate(px, 130.478px); backface-visibility: hidden; left: 0px; top: 0px; position: absolute;">
                        <rs-sbg-wrap data-key="rs-5" data-owidth="300" data-oheight="200">
                            <rs-bgvideo id="rs-bg-video-26873" class="defaultvid" data-key="rs-5"
                                style="z-index: 30; display: block; opacity: 1;">
                                <div class="html5vid rs_html5vidbasicstyles fullcoveredvideo">
                                    <video autoplay="true" muted=""
                                        style="object-fit: cover; background-size: cover; opacity: 1; width: 100%; height: 100%; position: absolute; left: 0px; top: 0px; display: block;"
                                        class="" looptransform="" preload="auto">
                                        <source src="management/asset/thumnail.mp4" type="video/mp4"></video>
                                </div>
                            </rs-bgvideo>
                        </rs-sbg-wrap>
                    </rs-sbg-px>
                    <div class="tnghtext">
                        <rs-layer class="font-thumbnail">
                            <p class="fonts-0"> GAJAH MADA RECORD (1986 - Now)</p>
                        </rs-layer>
                        <br>
                        <rs-layer class="font-thumbnail">
                            <p class="fonts-1">Label and Recording Company </p>
                        </rs-layer>
                    </div>
                </rs-module>
            </rs-module-wrap>
        </rs-fullwidth-wrap>
    </div>

    <!-- END Vidio Thumnail -->

    <div class="dima-container full" role="main">
        <div class="post-6 page type-page status-publish hentry no-post-thumbnail">
            <div class="entry-content">
                {{-- desk --}}
                @include('content.desk')
                {{-- end - desk --}}

                {{-- blogger --}}
                @include('content.blogger')
                {{-- end - blogger --}}

                {{-- list --}}
                @include('content.kategorilist')
                {{-- end - list --}}

                {{-- endorset --}}
                @include('content.endorsing')
                {{-- end - endorset --}}

                {{-- contact --}}
                @include('content.contact')
                {{-- end - contact --}}
            </div>
        </div>
    </div>
</div>
