<div class="col-lg-3">
    <div class="card sidebar-menu mb-4">
        <div class="card-header">
            <h3 class="h4 card-title">@lang('langviews.tour_categories') </h3>
        </div>
        <div class="card-body">
            @foreach($types as $type)
                @if($type->parent_id == null)
                <ul class="nav nav-pills flex-column category-menu">
                    <li>
                        <a href="category.html" class="nav-link">{{ $type->name }} </a>
                        <ul class="list-unstyled">
                            @foreach($types as $childen)
                                @if($childen->parent_id == $type->id)
                                <li>
                                    <a href="category.html" class="nav-link">
                                        {{ $childen->name }}
                                    </a>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>
                @endif
            @endforeach
        </div>
    </div>
</div>
