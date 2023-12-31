<?php

namespace Give\Framework\FieldsAPI;

/**
 * @since 2.12.0
 * @since 2.14.0 add min/max length validation
 */
class Text extends Field
{

    use Concerns\HasEmailTag;
    use Concerns\HasHelpText;
    use Concerns\HasLabel;
    use Concerns\HasMaxLength;
    use Concerns\HasMinLength;
    use Concerns\HasPlaceholder;


    const TYPE = 'text';
}
