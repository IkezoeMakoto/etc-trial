<?php
// 問題
// 1番から100番まで番号をもつロッカーがあります。
// 全て閉まっています。
//
// 1回目のアクションでは、1の倍数のロッカーに対して「開いていれば閉める。閉まっていれば開ける」を行います。
//
// n回目のアクションもnの倍数に対して同じことを行います。
//
// nは1から100までの整数です。
//
// n=100 のアクションが終わったとき、開いているロッカーの番号は何でしょう？


class Locker
{
    /** @var int $number */
    protected $number;
    /** @var bool $isOpen */
    protected $isOpen;

    /**
     * Locker constructor.
     * @param int $number
     */
    public function __construct(int $number)
    {
        $this->number = $number;
        $this->isOpen = false;
    }

    /**
     * 指定の番号で割り切れるか
     *
     * @param int $targetNum
     * @return bool
     */
    public function isDivision(int $targetNum): bool
    {
        return $this->number % $targetNum === 0;
    }

    /**
     * 開け閉めする
     */
    public function toggleOpenClose()
    {
        $this->isOpen = !$this->isOpen;
    }

    /**
     * 出力用
     *
     * @return string
     */
    public function __toString(): string 
    {
        $status = 'close';
        if ($this->isOpen) {
            $status = 'open';
        }
        return $this->number . ':' . $status;
    }
}

class Lockers
{
    /** @var int $limit */
    protected $limit;
    /** @var array $item */
    protected $items;

    /**
     * Lockers constructor.
     * @param int $limit
     */
    public function __construct(int $limit)
    {
        $this->limit = $limit;

        $this->item = [];
        for ($i = 1; $i <= $limit; $i++) {
            $this->items[$i] = new Locker($i);
        }
    }

    /**
     * $limitまでの数字で割り切れる数字を開け閉めする
     */
    public function execOpen()
    {
        for ($i = 1; $i <= $this->limit; $i++) {
            foreach ($this->items as $number => $locker) {
                if ($locker->isDivision($i)) {
                    $locker->toggleOpenClose();
                }
            }
        }
    }

    /**
     * 結果を出力
     */
    public function report()
    {
        foreach ($this->items as $locker) {
            echo $locker ."\n";
        }
    }
}

$lockers = new Lockers(100);
$lockers->execOpen();
$lockers->report();