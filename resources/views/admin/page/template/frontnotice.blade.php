<style>
    .notice-wrapper .notice-container {
        position: relative;
        margin: 0px;
    }

    .notice-section {
        display: flex;
        align-items: center;
        font-size: 1rem;
        background-color: #e3fded;
    }

    .notice-section .notice-header {
        background-color: #077430;
        color: #fff;
        font-weight: 900;
        padding: 8px 0px 8px 95px;
        clip-path: polygon(0 -40%, 96% 0, 85% 100%, 0 100%);
        width: 200px;
    }

    @media (max-width: 768px) {
        .notice-section {
            flex-direction: column;
            align-items: flex-start;
        }

        .notice-section .notice-header {
            width: 100%;
            padding: 8px;
            clip-path: none;
            text-align: center;
        }

        marquee {
            width: 100%;
        }
    }
</style>

<div class="notice-container" style="margin: 0px; padding: 0px">
    <div class="notice-section" id="notice-section">
        <div class="notice-header">सूचना</div>
        <marquee behavior="scroll" direction="left" scrolldelay="150">
            <span class="scroll ng-star-inserted">
                <a style="text-decoration: none; color: rgb(44, 41, 41)">
                    @foreach ($notices as $notice)
                        {{ $notice->title }}
                    @endforeach
                </a>
            </span>
        </marquee>
    </div>
</div>

<script>
    window.addEventListener('scroll', function() {
        var noticeSection = document.getElementById('notice-section');
        if (window.scrollY > 50) {
            noticeSection.style.display = 'none';
        } else {
            noticeSection.style.display = 'flex';
        }
    });
</script>
