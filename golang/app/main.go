package main

import (
	"fmt"
	"github.com/IkezoeMakoto/etc-trial/golang/app/service"
)

func main() {
	// todo: csv から取得
	urls := []string{"http://ua-detector.zoe.tools", "https://coin-step.com"}

	s := service.NewCheckStatusService(urls)
	statuses := s.GetAllStatus()
}