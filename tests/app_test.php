<?php

test('app initialized', function () {
    $this->get('/')->assertResponse(200);
});

