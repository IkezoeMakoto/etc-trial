module "key-pair" {
  source  = "Smartbrood/key-pair/aws"
  version = "0.4.0"

  key_name_prefix = "zoe-${terraform.workspace}-"
  public_key_path = "./modules/env/${terraform.workspace}/zoe_id_rsa.pub"
}
