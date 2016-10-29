class AddColumnsToUser < ActiveRecord::Migration
  def change
    add_reference :users, :role
    add_reference :users, :organization
  end
end
