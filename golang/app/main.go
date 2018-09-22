package main

import (
	"fmt"
	"os"

	"github.com/urfave/cli"
)

func main() {
	app := cli.NewApp()
	app.Name = "go-encryptor"
	app.Usage = "A tool that can freely encrypt or decrypt text! It is easier than making instant noodles."

	os.Setenv("SAMPLE_ENV", "sample env dayo")

	// flags
	app.Flags = []cli.Flag{
		cli.StringFlag{
			Name:  "mode, m",
			Value: "encrypt",
			Usage: "encrypt or decrypt",
		},
	}

	// action
	app.Action = func(c *cli.Context) error {
		fmt.Println("-- Action --")

		fmt.Printf("c.GlobalFlagNames() : %+v\n", c.GlobalFlagNames())
		fmt.Printf("c.String(\"lang\")    : %+v\n", c.String("lang"))
		fmt.Printf("c.String(\"m\")       : %+v\n", c.String("m"))
		fmt.Printf("c.String(\"time\")    : %+v\n", c.String("time"))
		fmt.Printf("c.String(\"a\")       : %+v\n", c.String("a"))

		return nil
	}

	app.Run(os.Args)
}