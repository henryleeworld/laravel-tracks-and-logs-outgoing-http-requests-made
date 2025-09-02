<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('spy:clean')->daily();
