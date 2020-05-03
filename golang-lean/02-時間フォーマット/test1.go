package main

import (
	"time"
	"fmt"
)

func main() {
	t := time.Now().Format("2006-01-02T15:04:05-07:00")

	fmt.Println(t)
}
