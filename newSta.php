<?php

class MathHelper {
    // १. Class Constant (कहिले नबदलिने मान)
    const PI = 3.1415;

    // २. Static Field / Property (क्लासको साझा वेरिएबल)
    public static $counter = 0;

    // ३. Static Method (अब्जेक्ट बिना चल्ने फङ्सन)
    public static function square($number) {
        // स्टाटिक मेथड भित्र स्टाटिक वेरिएबल चलाउँदा 'self::' प्रयोग गरिन्छ
        self::$counter++; 
        return $number * $number;
    }
}

// यहाँ हेर्नुहोस्: हामीले कुनै पनि Object ($math = new MathHelper()) बनाएका छैनौँ!

// १. Constant एक्सेस गर्दा:
echo "PI को मान: " . MathHelper::PI . "<br>"; // Output: 3.1415

// २. Static Method चलाउँदा:
echo "५ को Square: " . MathHelper::square(5) . "<br>"; // Output: 25
echo "७ को Square: " . MathHelper::square(7) . "<br>"; // Output: 49

// ३. Static Field (Property) एक्सेस गर्दा:
echo "फङ्सन कति पटक चल्यो?: " . MathHelper::$counter . "<br>"; // Output: 2
?>
