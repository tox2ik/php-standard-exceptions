<?php

namespace Genja\Exceptions;

use Exception;

class NotImplementedException extends Exception
{
	public function __construct($message = '', $code = 0, Exception $previous = null)
	{
		//if (empty($message)) {
		//	ob_start();
		//	debug_print_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 6);
		//	$message = PHP_EOL . ob_get_clean();
		//}
		parent::__construct($message, $code, $previous);
	}

}
