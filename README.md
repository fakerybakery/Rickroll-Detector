# Rick-Roll-Detector-2.0
The best PHP rick roll detector! **Works with PHP 5, 7.4, and 8!**
## Installation
Just download `rickrolldetector.php`!
## Usage
Function name: `isRickRoll()` (case-sensitive)

Function parameters: `string:url`

Usage example:

**Example 1**
```
include 'rickrolldetector.php';
if (isRickRoll('https://www.tomorrowtides.com/')) {
  echo "Yep, it's a rick roll!";
} else {
  echo "Nope, it's not a rick roll!";
}
```

**Example 2**
```
include 'rickrolldetector.php';
if (isRickRoll($_GET['url'])) {
  echo 'This link may be a rick roll, are you sure that you would like to visit it? <a href="' . htmlspecialchars($_GET['url']) . '">Visit this website, even though it may be a rick roll</a>;
} else {
  header('Location: ' . $_GET['url']);
}
```

## License

I'm not liable for any damage done by this software, etc...

Please give attribution.

If you install this software, you agree to take it down if I request it. If I request a removal of this software, you must remove it within 24 hours.

Copyright &copy; 2022 mrfakename. All rights reserved.
