package service

import (
	"net/http"
	"fmt"
)

type CheckStatusService struct {
	Urls []string
}

type Statuses map[string]int

func NewCheckStatusService(urls []string) CheckStatusService {
	return CheckStatusService{Urls: urls}
}

func (s CheckStatusService) GetAllStatus() Statuses {
	statuses := map[string]int{}

	for _, url := range s.Urls {
		res, err := http.Get(url)
		defer res.Body.Close()

		if err != nil {
			fmt.Println(err)
		}

		statuses[url] = res.StatusCode
	}
	return statuses
}