<!-- Search Area -->
<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-close">
                <span class="search-overlay-close-line"></span>
                <span class="search-overlay-close-line"></span>
            </div>
            <div class="search-overlay-form">
                <form action="{{route('products')}}" method="get">
                    <input type="text" class="input-search" placeholder="Search here..." name="name">
                    <button type="submit"><i class="fas fa-search search-btn"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>