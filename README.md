# Rickroll Detector 2.0
The best PHP rick roll detector! **Works with PHP 5, 7.4, and 8!**
## Installation
Just download `rickrolldetector.php`!
## Usage
Function name: `isRickRoll()` (case-sensitive)

Function parameters: `string:url`

Usage example:

**Example 1**
```php
include 'rickrolldetector.php';
$rickroll = new Rickroll('https://www.tomorrowtides.com/')->isRickroll();
if ($rickroll) {
  echo "This may be a rickroll.";
} else {
  echo "This probably isn't a rickroll.";
}
```

**Example 2**
```php
include 'rickrolldetector.php';
$rickroll = new Rickroll($_GET['url'])->isRickroll();
if ($rickroll) {
  echo 'This link may be a rick roll, are you sure that you would like to visit it? <a href="' . htmlspecialchars($_GET['url']) . '">Visit this website, even though it may be a rick roll</a>;
} else {
  header('Location: ' . $_GET['url']);
}
```

## License

This software is licensed under multiple licenses (similar to dual-licensing but with more than two). You may choose any of these licenses (whichever one you prefer) to use this software under. By submitting contributions, you license your software under *all* of these licenses.

The accepted licenses are: MIT, ISC, Apache 2.0, GPL/LGPL/AGPL (Any Version), UPL, MPL, and BSD-3/2.
