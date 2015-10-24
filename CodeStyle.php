<?php namespace Vendor\Package;

use FooInterface;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

// Class names should always start with an uppercase letter
class Foo extends Bar implements FooInterface {

	// You should use snake case for variables and constant names
	public $foo_bar = null;       // correct
	public $foo_bar = true;       // correct
	private $test = array();      // correct

	const foo_bar = 'value';      // correct
	const FOO_BAR = 'value';      // correct

	const S_C_VER = 'value';      // not descriptive name

	public $Foo_bar = null;       // incorrect
	public $fooBar = null;        // incorrect
	public $foo_bar = NULL;       // incorrect
	public $foo_bar = TRUE;       // incorrect

	// Line 1 starts with <?php and in the same line we have namespace if there is any.
	// Line 2 should be a blank line.
	// Line 3 all "use"s go here if there is any.
	// There should be blank line before class definition and after starting class brace.

	// All files should be saved with UTF-8 encoding. The BOM should not be used.
	// Files must be saved with Unix line breaks.
	// You should use tabs instead of spaces. (only at the beginning of lines and not when aligning the comments)
	// All PHP files should OMIT the closing PHP tag and instead use ONLY one blank line to mark the end of file.
	// You should trim all whitespace at the end of lines. Many IDEs have a feature like this.

	// You should pepper your code with inline comments as much as possible without being overly verbose.
	// Ideally you want to make it so that someone reading through the code the first time has a reasonable chance at understanding it.
	// The correct type of comment should be the double-slash with one space.

	/*
	 * In the views files you should use full php opening tags
	 *
	 * incorrect:
	 * <? echo $foo; ?>
	 * <?=$foo?>
	 *
	 * correct:
	 * <?php echo $foo; ?>
	*/

	// For the most part, administrator uses the camelCase style in both PHP and JavaScript.
	// The general exceptions to this rule are in variables, constant, CSS class names and config files where snake case is used.
	public function sampleFunction($a, $b = null)
	{
		// In almost all cases, a starting brace should be on the next line instead of on the same line.
		// This is called Allman style. wikipedia.org/wiki/Indent_style
		// This applies to everything from if statements to function declarations and the only exception to this rule is for class names.
		if ($a === $b)
		{
			// You should use one space before and after variable assignments and comparison operators
			$r = $a == $b;        // correct
			$r=$a>$b;             // incorrect
			$r = $a< $b;          // incorrect
			$r= $a !=$b;          // incorrect
			$r = $a ==$b;         // incorrect
		}
		// You should use one space after "if", "elseif" and comparison also there should not be any space after "(". "[" and before ")", "]"
		elseif ($a > $b)
		{
			$r = $a === $b;       // correct
			$r = $a == $b;        // correct
			$r = ($a !== $b);     // correct
			$r = (! $a > $b);     // correct
			$arr[$foo] = 'foo';   // correct
			$r = $a===$b;         // incorrect
			$r = (!$a > $b);      // incorrect
			$r = ( $a !== $b );   // incorrect
			$arr[ $foo ] = 'foo'; // incorrect
		}
		// correct
		elseif ($something === $something_else && ! $other_thing)
		{
		}
		// correct
		elseif (isset($the_other))
		{
		}
		// incorrect
		elseif ($something === $something_else && ! $other_thing) {
		}
		// incorrect
		elseif($something === $something_else && ! $other_thing)
		{
		}
		// incorrect
		elseif ( $something === $something_else && ! $other_thing )
		{
		}
		else
		{
			// You should use one space after "," in parameters should not be any space after "(" and before ")"
			$foo->bar($arg1, $arg2);        // correct
			BazClass::bar($arg2, $arg3);    // correct
			$foo->bar($arg1 , $arg2);       // incorrect
			$foo->bar ($arg1, $arg2);       // incorrect
		}

		// Be liberal with your line breaks. The goal is to make the code very readable, and line breaks are an essential factor for legibility.
		// You can group certain things together, like if you're setting a bunch of variables, but only do this when it makes sense.
		// Line breaks should come before all comments, all statements (e.g. if, foreach), all function/method comments, etc.
		// If you're having difficulty deciding whether to add a line break to a section of code, search around the rest of the code base to
		// find a similar section and use that as a guide.

		for ($j = 0; $j < 10; $j++)
		{
			$this->test = array(
				'1stkey' => "1st value",
				'2ndkey' => '2nd value',
			);

			if ($condition)
			{
				bar();
			}

			$this->callMethod($temp_variable, $this->test);
		}
	}

	public function bar()
	{
		// Be careful when using Equal and Identical
		// stackoverflow.com/questions/80646/
		$empty = '';
		$r =  $empty == false;              // $r => true
		$r =  $empty === false;             // $r => false

		$foo = 'foo';
		$r = strpos($foo, 'foo') == false;  // $r => true
		$r = strpos($foo, 'foo') === false; // $r => false
	}

	public function bar()
	{
		// Be careful when using logical operators AND and OR instead of && and ||
		// AND and OR have lower precedence than && and || even lower than assignment
		$true = true;
		$false = false;
		$r = $true and $false;    // $r => true
		$r = $true && $false;     // $r => false

		// Usage
		$condition AND thisFunctionWillBeCalledOnlyIfConditionIsTrue();
		$condition OR thisFunctionWillBeCalledOnlyIfConditionIsFalse();

		// Initializing variable
		$variable OR $variable = initializeMe();
	}

	public static function bar()
	{
		// for all todo comments we use "TODO:" like the below sample
		// TODO: here is todo comment
	}

	public static function bar()
	{
		// Always use single quoted strings unless you need variables parsed.
		// In cases where you do need variables parsed, use braces to prevent greedy token parsing.
		// You may also use double-quoted strings if the string contains single quotes, so you do not have to use escape characters.

		// No variable parsing, so no use for double quotes
		$greeting = "Welcome!";

		// correct
		$greeting = 'Welcome!';

		// ugly
		$sql = 'SELECT foo FROM bar WHERE baz = \'bag\'';

		// correct
		$sql = "SELECT foo FROM bar WHERE baz = 'bag'";

		// incorrect
		$greeting = "Welcome, $name!";

		// correct
		$greeting = "Welcome, {$name}!";

		// acceptable
		$greeting = 'Welcome, ' . $name . '!';

		// not suggested
		$greeting = "Welcome, " . $name . "!";

		// bug
		$greeting = 'Welcome, {$name}!';
		$greeting = 'Welcome, $name!';
	}

	public static function bar()
	{
		// Class instantiation
		$obj = new Foo;           // correct
		$obj = new Foo();         // incorrect
		$obj = new Foo($sth);     // correct
	}

	// Whenever appropriate, provide function argument defaults,
	// which helps prevent PHP errors with mistaken calls and provides common fallback values which can save a few lines of code.
	public static function bar($bar = '', $baz = false)
	{

	}

	// Whenever appropriate, provide function argument type
	public static function bar(ClassOrTypeName $bar)
	{

	}

	public static function bar()
	{
		// Never combine statements on one line.

		// incorrect
		$foo = 'this'; $bar = 'that'; $bat = str_replace($foo, $bar, $bag);

		// correct
		$foo = 'this';
		$bar = 'that';
		$bat = str_replace($foo, $bar, $bag);
	}

	public static function bar()
	{
		// Correct style for switch case
		switch ($foo)
		{
			case 'sth':
				// do sth
				break;
			case 'sth else':
				// do sth else
				break;
			default:
				// party!
		}
	}

	// it's good practice to have a blank line before class ending brace

}
