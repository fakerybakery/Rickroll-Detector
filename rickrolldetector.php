<?php
class Rickroll
{
    public $isRickroll = null;
    function __construct($url)
    {
        $isRickroll = $this->isRickRoll($url);
    }
    public function isRickroll()
    {
        return $this->isRickroll;
    }
    private function isRickRoll($url)
    {
        $c = file_get_contents($url);
        return (stripos($c, 'https://youtube') && stripos($c, 'dQw4w9WgXcQ')) ||
            stripos($c, 'https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ?&enablejsapi=1&autoplay=1&mute=1') ||
            stripos($c, 'https://www.youtube.com/watch?v=dQw4w9WgXcQ') ||
            stripos($c, 'rick astley') ||
            stripos($c, 'rickroll') ||
            stripos($c, 'rick roll') ||
            stripos(strtolower($url), 'dQw4w9WgXcQ') ||
            stripos($c, 'dQw4w9WgXcQ') ||
            stripos($url, 'kavin.rocks') ||
            stripos($url, 'free-downloads.glitch.me') ||
            stripos($url, 'my-website.dheeraj2008.repl.co') ||
            stripos(strtolower($url), 'rr.noordstar.me') ||
            stripos(strtolower($url), 'r.mtdv.me') ||
            stripos(strtolower($url), 'discord.yonle.repl.co') ||
            stripos($c, 'nevergonnagiveyouup') ||
            stripos($c, 'Unless, you edit the page source, exit the page, go to a different page, mute your volume.') ||
            stripos($c, 'never gonna give you up');
    }
}
