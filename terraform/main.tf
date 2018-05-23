terraform {
  required_version = ">= 0.11.7"

  backend "s3" {
    profile = "zoe.terraform"
    bucket  = "zoe-terraform"
    key     = "terraform.tfstate"
    region  = "ap-northeast-1"
  }
}

provider "aws" {
  version = "~> 1.19.0"
  profile = "zoe.terraform"
  region  = "ap-northeast-1"
}

module "include" {
  source = "modules/"
}