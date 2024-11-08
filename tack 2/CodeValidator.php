<?php

/**
 * Класс отвечает за проверку того, является ли
 * переданная в констрвкторе строка корректным кодом
 *
 * @author Vadim Tkachev
 */
class CodeValidator
{
    /**
     * @var string Хранит переданный в конструкторе код
     */
    private $code;

    /**
     * Конструктор CodeValidator
     *
     * @param string $code Проверяемая строка
     */
    public function __construct(string $code)
    {
        $this->code = $code;
    }

    /**
     * Проверяет хранящуюся строку на то, является ли она корректным кодом
     *
     * @return boolean
     */
    public function isCorrect(): bool
    {
        // Счётчик открытых и закрытых скобок
        $stack = 0;

        for ($i = 0; $i < strlen($this->code); $i++) {
            $char = $this->code[$i];

            // Если находим скобку, уменьшаем или увеличиваем счётчик
            if ($char === "{") {
                $stack++;
            } elseif ($char === "}") {
                $stack--;
            }

            // Если счётчик меньше нуля, значит, скобки закрываются раньше, чем открываются
            if ($stack < 0) {
                return false;
            }
        }

        // Если после прохода по строке счётчик не равен нулю, значит
        // количество открывающих и закрывающих скобок не совпадает
        return $stack === 0;
    }
}
