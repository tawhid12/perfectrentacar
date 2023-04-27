<tr>

    <td class="item_name">
        <input type="text" class="form-control" placeholder="en"
               name="custom_langs[code][]" value="<?php echo e($k); ?>">
    </td>
    <td class="quantity">
        <input type="text" class="form-control"
               placeholder="English" name="custom_langs[name][]"
               value="<?php echo e($v); ?>">
    </td>

    <td width="1%">
        <button data-toggle="tooltip"
                data-original-title="Delete"
                class="btn btn-danger btn-delete" type="button">
            <span class="glyphicon glyphicon-minus"></span>
        </button>

    </td>

</tr>