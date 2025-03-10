<style>
    .notice-wrapper[_ngcontent-cww-c94] .notice-container[_ngcontent-cww-c94] {
        position: relative;
        margin: 0px;
    }

    .notice-section[_ngcontent-cww-c94] {
        display: flex;
        align-items: center;
        font-size: 1rem;
        background-color: #e3fded;
    }

    .notice-section[_ngcontent-cww-c94] .notice-header[_ngcontent-cww-c94] {
        background-color: #077430;
        color: #fff;
        font-weight: 900;
        padding: 8px 0px 8px 95px;
        clip-path: polygon(0 -3%, 100% 0, 75% 100%, 0 100%);
        width: 200px;
    }
</style>

<div _ngcontent-cww-c94="" class=" notice-container" style="margin: 0px; padding: 0px">
    <div _ngcontent-cww-c94="" class="notice-section">
        <div _ngcontent-cww-c94="" class="notice-header ">Notice</div>
        <marquee _ngcontent-cww-c94="" behavior="scroll" direction="left" scrolldelay="150">
            <span _ngcontent-cww-c94="" class="scroll ng-star-inserted">
                <a _ngcontent-cww-c94="" style="text-decoration: none; color: rgb(44, 41, 41)">
                    @foreach ($notices as $notice)
                        {{ $notice->title }}
                    @endforeach
                </a>
            </span>
        </marquee>
    </div>
</div>
