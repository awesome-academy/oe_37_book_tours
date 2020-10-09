<?php

function showTypes($types, $parent_id = null,$char = '')
{
    foreach ($types as $value) {
        if ($value['parent_id'] == $parent_id) { ?>
            <ul class="list-unstyled m-3">
                <li class="nav-item">
                    <a href="{{ route('tour.category', $value['id']) }}" class="nav-link text-dark font-weight-bold">
                        <?=$char.$value['name'];
                        unset($value['name']); ?>
                    </a>
                </li>
                <?php showTypes($types, $value['id'],$char.'<i class="fa fa-arrow-right text-success"></i>'); ?>
            </ul>
<?php       
        }
    }
}
showTypes($types);
