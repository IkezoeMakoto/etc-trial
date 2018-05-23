module "sg-https" {
  source  = "terraform-aws-modules/security-group/aws"
  version = "1.25.0"

  name                = "zoe-https"
  vpc_id              = "${module.vpc.vpc_id}"
  ingress_cidr_blocks = ["0.0.0.0/0"]
  ingress_rules       = ["https-443-tcp"]

  tags {
    Terraform   = "true"
    Environment = "testing"
  }
}

module "sg-ssh" {
  source  = "terraform-aws-modules/security-group/aws"
  version = "1.25.0"

  name                = "zoe-ssh"
  vpc_id              = "${module.vpc.vpc_id}"
  ingress_cidr_blocks = ["0.0.0.0/0"]
  ingress_rules       = ["ssh-tcp"]

  tags {
    Terraform   = "true"
    Environment = "testing"
  }
}

module "sg-mysql" {
  source  = "terraform-aws-modules/security-group/aws"
  version = "1.25.0"

  name                = "testing-mysql"
  vpc_id              = "${module.vpc.vpc_id}"
  ingress_cidr_blocks = ["0.0.0.0/0"]
  ingress_rules       = ["mysql-tcp"]

  tags {
    Terraform   = "true"
    Environment = "testing"
  }
}
