<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper{{ !empty($wrapperClass) ? ' ' . $wrapperClass : '' }}">
  <div class="container">
    <div class="pbmit-title-bar-content">
      <div class="pbmit-title-bar-content-inner">
        <div class="pbmit-tbar">
          <div class="pbmit-tbar-inner container">
            <h2 class="pbmit-tbar-title">{{ $title }}</h2>
          </div>
        </div>
        <div class="pbmit-breadcrumb">
          <div class="pbmit-breadcrumb-inner">
            <span>
              <a title="Seven Countries" href="/" class="home"><span>Seven Countries</span></a>
            </span>
            <span class="sep">/</span>
            <span><span class="post-root post post-post current-item">{{ $title }}</span></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Title Bar End-->