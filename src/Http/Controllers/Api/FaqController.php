<?php

namespace jsbhudev\faq\Http\Controllers\Api;

use jsbhudev\faq\Http\Controllers\Api\BaseApiController;
use jsbhudev\faq\Http\Resources\Faqresource;
use jsbhudev\faq\Models\faq;

class FaqController extends BaseApiController
{
    public function index()
    {
        return $this->handleResponse(Faqresource::collection(Faq::all()), config('faq.success_msg'));
    }
}
