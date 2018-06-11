performance analyze for your php script 




### How to use it

it's very simple just like this
````
$pa = PAFactory::getPA(__CLASS__,__METHOD__);
$pa->markStartTime();
$pa->markPoint('do sleep');
$pa->markEndTime();
````


eg .
```
php demo/Demo.php
```



it will output like this
 
```
~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~ ~
class = Demo method=Demo::calculate total consumed 5013.3940429688 milliseconds and total used 1.4765625 kb
between "marker_start" and "do loop"
used time 0.2021484375 milliseconds
used memory 0.6640625 kb
----------------------------------------------------------------------------------------------------
between "do loop" and "do sleep"
used time 5013.1108398438 milliseconds
used memory 0.359375 kb
----------------------------------------------------------------------------------------------------
between "do sleep" and "marker_end"
used time 0.0810546875 milliseconds
used memory 0.453125 kb
----------------------------------------------------------------------------------------------------
```

### Contribution

If you find a bug or want to contribute to the code or documentation, you can help by submitting an [issue](https://github.com/williamchu123/PerformanceAnalyzeForphp/issues) or a [pull
request](https://github.com/williamchu123/PerformanceAnalyzeForphp/pulls).

### License

[MIT](http://opensource.org/licenses/MIT)