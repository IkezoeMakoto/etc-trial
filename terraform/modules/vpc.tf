module "vpc" {
  source  = "terraform-aws-modules/vpc/aws"
  version = "1.31.0"

  name             = "test"
  cidr             = "172.33.0.0/16"
  instance_tenancy = "default"

  azs            = ["ap-northeast-1a", "ap-northeast-1c"]
  public_subnets = ["172.33.0.0/24", "172.33.1.0/24"]

  enable_dns_hostnames = true

  tags = {
    Terraform   = "true"
    Environment = "testing"
  }
}
