<?php

const GPIO_MODES = ['input' => 'in', 'output' => 'out'];

const DIGITAL_TRUE = 1;
const DIGITAL_FALSE = 0;

echo $_POST['value'];

shell_exec('gpio -g mode 25 '.GPIO_MODES['output']);
shell_exec('gpio -g write 25 '.($_POST['value'] ? DIGITAL_TRUE : DIGITAL_FALSE));
echo 'gpio -g write 25 '.($_POST['value'] ? DIGITAL_TRUE : DIGITAL_FALSE);