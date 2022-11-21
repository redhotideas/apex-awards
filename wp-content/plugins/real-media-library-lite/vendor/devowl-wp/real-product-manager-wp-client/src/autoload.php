<?php

namespace MatthiasWeb\RealMediaLibrary\Vendor\DevOwl\RealProductManagerWpClient;

// Simply check for defined constants, we do not need to `die` here
if (\defined('ABSPATH')) {
    \MatthiasWeb\RealMediaLibrary\Vendor\DevOwl\RealProductManagerWpClient\Utils::setupConstants();
    \MatthiasWeb\RealMediaLibrary\Vendor\DevOwl\RealProductManagerWpClient\Localization::instanceThis()->hooks();
}
