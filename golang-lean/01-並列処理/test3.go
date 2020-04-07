package main

import (
    "log"
    "sync"
    "time"
)

func main() {
    log.Print("started.")
    fs := []func(){
        func() {
            // 1秒かかるコマンド
            log.Print("sleep1 started.")
            time.Sleep(1 * time.Second)
            log.Print("sleep1 finished.")
        },
        func() {
            // 2秒かかるコマンド
            log.Print("sleep2 started.")
            time.Sleep(2 * time.Second)
            log.Print("sleep2 finished.")
        },
        func() {
            // 3秒かかるコマンド
            log.Print("sleep3 started.")
            time.Sleep(3 * time.Second)
            log.Print("sleep3 finished.")
        },
    }

    wg := sync.WaitGroup{}
    for _, f := range fs {
        wg.Add(1)
        go func (f func()) {
            defer wg.Done()
            f()
        }(f)
    }
    wg.Wait()

    log.Print("all finished.")
}
