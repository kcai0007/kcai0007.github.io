<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\Identifiable;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

/**
 * Tag class AmpFacebookLike.
 *
 * @package ampproject/amp-toolbox.
 *
 * @property-read string $tagName
 * @property-read array<string> $attrLists
 * @property-read array<array<string>> $ampLayout
 * @property-read array<string> $htmlFormat
 * @property-read array<string> $requires
 * @property-read array<string> $requiresExtension
 */
final class AmpFacebookLike extends Tag implements Identifiable
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'AMP-FACEBOOK-LIKE';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Extension::FACEBOOK_LIKE,
        SpecRule::ATTR_LISTS => [
            AttributeList\AmpFacebookStrict::ID,
            AttributeList\ExtendedAmpGlobal::ID,
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES => [
            'amp-facebook-like 0.1',
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::FACEBOOK_LIKE,
        ],
    ];
}
